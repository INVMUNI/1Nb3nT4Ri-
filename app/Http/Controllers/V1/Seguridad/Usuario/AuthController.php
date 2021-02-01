<?php

namespace App\Http\Controllers\V1\Seguridad\Usuario;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Auth\Authenticatable;
use App\Http\Controllers\ApiController;
use App\Models\V1\Seguridad\Usuario;

class AuthController extends ApiController
{
    use Authenticatable;

    public function __construct()
    {
        $this->middleware('auth:passport')->except(['login']);
    }

    //inicio de session y creacion de token personal
    public function login(Request $request)
    {

        $request->validate([
            'cui'       => 'required|string',
            'password'    => 'required|string',
        ]);

        $credentials = request(['cui', 'password']);

        $http = new Client(
            [
                'verify' => false
            ]
        );

        $response = $http->post(config('services.passport.base_url') . 'service/passport/generar/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => config('services.passport.client_id'),
                'client_secret' => config('services.passport.client_secret'),
                'username' => $request->cui,
                'password' => $request->password,
                'scope' => '*',
            ],
        ]);

        return json_decode((string) $response->getBody(), true);
    }

    /**
     * @OA\Get(
     *      path="/api/v1/ecssa/precios",
     *      operationId="getPrecios",
     *      tags={"Precios"},
     * security={
     *  {"passport": {}},
     *   },
     *      summary="Muestra todos los precios de los diferentes productos",
     *      description="Retorna todos lo registros de precios almacenados en la Base de Datos",
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
     * @OA\Response(
     *      response=400,
     *      description="Solicitud incorrecta"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="Servicio no encontrado"
     *   ),
     *  )
     */
    public function me(Request $request)
    {
        $user = $request->user();

        return response()->json([
            'user' => $user
        ]);
    }

    //cerrar session
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return $this->showMessage("saliendo...", 200);
    }
}
