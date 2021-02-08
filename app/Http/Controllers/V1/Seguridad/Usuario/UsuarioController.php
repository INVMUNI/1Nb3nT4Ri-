<?php

namespace App\Http\Controllers\V1\Seguridad\Usuario;

use Illuminate\Http\Request;
use App\Models\V1\Seguridad\Usuario;
use App\Http\Controllers\ApiController;

class UsuarioController extends ApiController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @OA\Get(
     *      path="/service/rest/v1/security/user",
     *      operationId="getUsers",
     *      tags={"Usuario"},
     *      security={
     *          {"passport": {}},
     *      },
     *      summary="Muestra todos los usuarios registrados en la base de datos.",
     *      description="Retorna un array de usuarios.",
     *      @OA\Response(
     *          response=200,
     *          description="Respuesta correcta",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="No autenticado",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Permisos denegados"
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="Solicitud incorrecta"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Servicio no encontrado"
     *      ),
     *  )
     */
    public function index()
    {
        $users = Usuario::with('departament', 'municipality')->get();
        return $this->showAll($users);
    }

    /**
     * @OA\Post(
     *      path="/service/rest/v1/security/user",
     *      operationId="postUsers",
     *      tags={"Usuario"},
     *      security={
     *          {"passport": {}},
     *      },
     *      summary="Crear un nuevo usuario en el sistema.",
     *      description="Retorna el objeto del usuario creado.",
     *      @OA\Response(
     *          response=200,
     *          description="Respuesta correcta",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="No autenticado",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Permisos denegados"
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="Solicitud incorrecta"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Servicio no encontrado"
     *      ),
     *  )
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @OA\Get(
     *      path="/service/rest/v1/security/user/{user}/edit",
     *      operationId="findUserbyId",
     *      tags={"Usuario"},
     *      security={
     *          {"passport": {}},
     *      },
     *      summary="Actualizar la contraseña del usuario seleccionado.",
     *      description="Retorna el objeto del usuario actualizado.",
     *      @OA\Parameter(
     *          description="ID del usuario para actualizar",
     *          in="path",
     *          name="user",
     *          required=true,
     *          @OA\Schema(
     *              type="integer",
     *              format="int64",
     *          )
     *     ),
     *      @OA\Response(
     *          response=200,
     *          description="Respuesta correcta",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *          )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="No autenticado",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Permisos denegados"
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="Solicitud incorrecta"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Servicio no encontrado"
     *      ),
     *  )
     */
    public function edit(Usuario $user)
    {
        //
    }

    /**
     * @OA\Put(
     *      path="/service/rest/v1/security/user/{user}",
     *      operationId="updateUser",
     *      tags={"Usuario"},
     *      security={
     *          {"passport": {}},
     *      },
     *      summary="Actualizar el usuario seleccionado.",
     *      description="Retorna el objeto del usuario actualizado.",
     *      @OA\Parameter(
     *          description="ID del usuario para actualizar",
     *          in="path",
     *          name="user",
     *          required=true,
     *          @OA\Schema(
     *              type="integer",
     *              format="int64",
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Respuesta correcta",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *          )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="No autenticado",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Permisos denegados"
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="Solicitud incorrecta"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Servicio no encontrado"
     *      ),
     *  )
     */
    public function update(Request $request, Usuario $user)
    {
        //
    }

    /**
     * @OA\Delete(
     *      path="/service/rest/v1/security/user/{user}",
     *      operationId="deleteUser",
     *      tags={"Usuario"},
     *      security={
     *          {"passport": {}},
     *      },
     *      summary="Eliminar el usuario seleccionado.",
     *      description="Retorna el objeto del usuario eliminado.",
     *      @OA\Parameter(
     *          description="ID del usuario para eliminar",
     *          in="path",
     *          name="user",
     *          required=true,
     *          @OA\Schema(
     *              type="integer",
     *              format="int64",
     *          )
     *     ),
     *      @OA\Response(
     *          response=200,
     *          description="Respuesta correcta",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *          )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="No autenticado",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Permisos denegados"
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="Solicitud incorrecta"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Servicio no encontrado"
     *      ),
     *  )
     */
    public function destroy(Usuario $user)
    {
        //
    }
}
