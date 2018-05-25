<?php

namespace App\Resource;

use Slim\App;
use App\AbstractResource;
use App\Entity\User;

/**
 * Class Resource
 * @package App
 */
class UserResource extends AbstractResource
{

    /**
     * @param $id
     *
     * @return string
     */
    public function get($id)
    {
        if ($id === null) {
            $users = $this->getEntityManager()->getRepository('App\Entity\User')->findAll();
            $users = array_map(function($user) {
                return $this->convertToArray($user); },
                $users);
            $data = json_encode($users);
        } else {
            $user = $this->convertToArray($this->getEntityManager()->find('App\Entity\User', $id));
            $data = json_encode($user);
        }
        return $data;
    }
    
    public function delete($id)
    {
        $em = $this->getEntityManager();
        $user = $em->getRepository('App\Entity\User')->find($id);
        $em->remove($user);
        $em->flush($user);
    }

    public function post($params)
    {
        $user = new User;
        $user->setFirstname($params['firstname']);
        $user->setlastname($params['lastname']);
        $user->setEmail($params['email']);
        $user->setCountry($params['country']);
        
        $em = $this->getEntityManager();
        $em->persist($user);
        $em->flush();
    }

    private function convertToArray(User $user) {
        return array(
            'id' => $user->getId(),
            'firstname' => $user->getFirstname(),
            'lastname' => $user->getLastname(),
            'country' => $user->getCountry(),
            'email' => $user->getEmail()
        );
    }
    
    public function put($id, $params)
    {
        $em = $this->getEntityManager();
        $user = $em->getRepository('App\Entity\User')->find($id);

        $user->setFirstname($params['firstname']);
        $user->setlastname($params['lastname']);
        $user->setEmail($params['email']);
        $user->setCountry($params['country']);
        
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
        
        return json_encode($this->convertToArray($user));
    }
}