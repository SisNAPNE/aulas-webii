<?php
    
    namespace app\controllers;
   
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;

    use app\database\models\User;

    class UserController {

        private $user;

        public function __construct() {
            $this->user = new User();
        }

        public function index(Request $request, Response $response, $args) {

            $data = $this->user->all();
            $response->getBody()->write(json_encode($data));
            return $response;
        }

        public function create(Request $request, Response $response, $args) {

            /*$response->getBody()->write("<h1>CREATE USER</h1>");
            return $response;*/

            $input = $request->getParsedBody();

            $data = $this->user->create(array(
                'name' => $input['name'], 
                'email' => $input['email'],
                'password' => $input['password']
            ));

            $response->getBody()->write(json_encode($data));
            return $response;
        }

        public function update(Request $request, Response $response, $args) {

            /*$response->getBody()->write("<h1>UPDATE USER</h1>");
            return $response;*/

            $input = $request->getParsedBody();

            $data = $this->user->update(
                array(
                    'name' => $input['name'], 
                    'email' => $input['email'],
                    'password' => $input['password']
                ),
                array(
                    'id' => $args['id']
                )
            );

            $response->getBody()->write(json_encode($data));
            return $response;
        }

        public function delete(Request $request, Response $response, $args) {

            $data = $this->user->delete(
                array('id' => $args['id'])
            );

            $response->getBody()->write(json_encode($data));
            return $response;
        }
    }