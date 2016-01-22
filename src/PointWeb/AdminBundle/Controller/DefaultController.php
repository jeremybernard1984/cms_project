<?php

namespace PointWeb\AdminBundle\Controller;

use PointWeb\AdminBundle\Entity\Reglage;
use PointWeb\AdminBundle\Entity\File;
use PointWeb\AdminBundle\Entity\Image;
use PointWeb\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PointWebAdminBundle:Default:index.html.twig');
    }

    public function uploadAction(Request $request)
    {
        $form = $this->createFormBuilder()->getForm();
        $form->handleRequest($request);

        $files = $request->files->all();
        if ($request->getMethod() == "POST") {
            $result = array();
            foreach ($files as $file) {
                $name = sha1(uniqid(mt_rand(), true)) . '.' . $file->guessExtension();
                $file->move(__DIR__ . '/../../../../web/upload/tmp', $name);
                /* thumbnail
                    $src = __DIR__ . '/../../../../web/upload/tmp/'. $name;
                    $dest = __DIR__ . '/../../../../web/upload/tmp/thumbnail_'.$name;
                    $this->thumbnail($src, $dest, 200);
                */
                $result[$request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath() . '/upload/tmp/' . $name] = __DIR__ . '/../../../../web/upload/tmp/' . $name;

            }
            return new JsonResponse($result);
        }

        return $this->render('PointWebAdminBundle:Default:dropzone.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function userInfo()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        return $user;
    }

        public function userInfoAdminAction()
        {
            $user = $this->userInfo();
            return $this->render('PointWebUserBundle:User:menu_left_user.html.twig', array(
                'user' => $user
            ));
        }




        public function topAdminAction()
        {
            $em = $this->getDoctrine()->getManager();
            $reglage = $em->getRepository('PointWebAdminBundle:Reglage')->find(1);

            $roleSuperAdmin = false;
            $userId = $this->userInfo()->getId();
            $roles = $this->userInfo()->getRoles();
            foreach ($roles as $role) {
                //var_dump($role);
                if ($role == 'ROLE_SUPER_ADMIN'){
                    $roleSuperAdmin = true;
                }
            }
            return $this->render('PointWebAdminBundle::_top_admin.html.twig', array(
                'reglage' => $reglage,
                'userId' => $userId,
                'roleSuperAdmin' => $roleSuperAdmin,
            ));
        }
        public function leftAdminAction()
        {
            $em = $this->getDoctrine()->getManager();
            $reglage = $em->getRepository('PointWebAdminBundle:Reglage')->find(1);
            //$reglage = $this->reglages();
            return $this->render('PointWebAdminBundle::_left_admin.html.twig', array(
                'reglage' => $reglage,
            ));
        }
    public function headerAdminAction()
    {
        //$backgroundStyle = $this->reglages()->getBackgroundStyle();
        $backgroundStyle = '0';
        return $this->render('PointWebAdminBundle::_header.html.twig', array(
            'backgroundStyle' => $backgroundStyle,
        ));
    }

    public function deletefileAction()
    {
        if($_POST["action"]=="deleteimage")
        {
            $imagefile = basename($_POST['imagefile']); // See http://php.net/basename
            $path = __DIR__ . '/../../../../web/upload/documents/'. $imagefile;
            $path_small = __DIR__ . '/../../../../web/upload/documents/small_'. $imagefile;
            if(!file_exists($path)) {
                echo json_encode(array("success" => 0, "error" => "File $path does not exist"));
                exit;
            }
            if(!unlink($path)) {
                echo json_encode(array("success" => 0, "error" => "File could not be deleted, check permissions"));
                exit;
            }else{
                if(!unlink($path_small)) {
                    echo json_encode(array("success" => 0, "error" => "File could not be deleted, check permissions"));
                    exit;
                }
                $result = json_encode(array("success" => 1));
                return new JsonResponse($result);
            }
        }
    }


}
