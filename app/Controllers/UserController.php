<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController
{
    public function index(){
        $userdata = new User();
        $data['users'] = $userdata->orderBy('id','ASC')->findAll();
        return view('user',$data);
    }
    public function create(){
        return view('create_user');
    }
    public function store(){
        $userdata = new User();
        $data  = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
        ];
        $saveData = $userdata->insert($data);
        return $this->response->redirect(site_url('/'));
    }
    public function edit($id){
        $userdata = new User();
        $data['users'] = $userdata->where('id', $id)->first();
        return view('edit_user', $data);
    }
    public function update(){
        $userdata = new User();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
        ];
        $userdata->update($id, $data);
        return $this->response->redirect(site_url('/'));
    }
    public function delete($id){
        $userdata = new User();
        $data['users'] = $userdata->where('id', $id)->delete();
        return $this->response->redirect(site_url('/'));
    }
}