<?php

namespace App\Controller;

use RestApi\Controller\ApiController;

/**
 * Foo Controller
 *
 */
class JsonController extends ApiController
{

    /**
     * bar method
     *
     * @return Response|null
     */
    public function bar()
    {
        $movies = [
            'Captain America: Civil War',
            'The Wave',
            'Deadpool'
        ];

        $this->apiResponse['movies'] = $movies;

        // i.e. http://localhost:8081/foo/bar?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Im5hcmVuZHJhQGV4YW1wbGUuY29tIiwibmFtZSI6Ik5hcmVuZHJhIn0.Cz8MxCUz6GbsQ698IVIm_v7v40jaCj9s_F0FvS6Ya2k

        // set payload
        $this->apiResponse['payload'] = $this->jwtPayload;
        // set token
        $this->apiResponse['token'] = $this->jwtToken;

        // result:
        // {"status":"OK","result":{"movies":["Captain America: Civil War","The Wave","Deadpool"],"payload":{"email":"narendra@example.com","name":"Narendra"},"token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Im5hcmVuZHJhQGV4YW1wbGUuY29tIiwibmFtZSI6Ik5hcmVuZHJhIn0.Cz8MxCUz6GbsQ698IVIm_v7v40jaCj9s_F0FvS6Ya2k"}}


    }

    public function citiesList(){

        $this->loadModel('Cities');

        $citiesList = $this->Cities->find()->extract('name');
        $this->apiResponse['cities'] = $citiesList;
        $this->apiResponse['token'] = $this->jwtToken;
    }

    public function add(){
        $this->request->allowMethod('post');

        //debug($this->request->data);

        //debug($this->request->getQuery('slug') );

        $this->apiResponse['slug'] = $this->request->data('slug'); // $this->request->getData('name'); // getParam('slug');

        $this->apiResponse['name'] = $this->request->data('name'); //$this->request->getData('slug');

        $this->apiResponse['token'] = $this->jwtToken;

    }


}