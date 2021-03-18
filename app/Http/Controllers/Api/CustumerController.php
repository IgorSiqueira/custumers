<?php

namespace App\Http\Controllers\Api;

use App\Models\Custumer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Utils\HttpStatusCodesUtils;
use App\Http\Resources\{DefaultResource,DefaultErrorResource};

class CustumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            
            $data = Custumer::get();
            //Reposta JSON padrão para sucesso
            return new DefaultResource([
                'message' => __("api.default_success_message"),
                'data' => $data
            ]);

        } catch (\Exception $error) {
            //Resposta JSON padrão para falhas
            return (new DefaultErrorResource(['message' => $error->getMessage()]))->response()->setStatusCode(HttpStatusCodesUtils::INTERNAL_SERVER_ERROR);
        }
    }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {       
            //Reposta JSON padrão para sucesso
            return new DefaultResource([
                'message' => __("api.default_success_message"),
                'data' => "Listagem"
            ]);

        } catch (\Exception $error) {
            //Resposta JSON padrão para falhas
            return (new DefaultErrorResource(['message' => $error->getMessage()]))->response()->setStatusCode(HttpStatusCodesUtils::INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {       
            //Reposta JSON padrão para sucesso
            return new DefaultResource([
                'message' => __("api.default_success_message"),
                'data' => "Listagem"
            ]);

        } catch (\Exception $error) {
            //Resposta JSON padrão para falhas
            return (new DefaultErrorResource(['message' => $error->getMessage()]))->response()->setStatusCode(HttpStatusCodesUtils::INTERNAL_SERVER_ERROR);
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {       
            //Reposta JSON padrão para sucesso
            return new DefaultResource([
                'message' => __("api.default_success_message"),
                'data' => "Listagem"
            ]);

        } catch (\Exception $error) {
            //Resposta JSON padrão para falhas
            return (new DefaultErrorResource(['message' => $error->getMessage()]))->response()->setStatusCode(HttpStatusCodesUtils::INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {       
            
            //Reposta JSON padrão para sucesso
            return new DefaultResource([
                'message' => __("api.default_success_message"),
                'data' => "Listagem"
            ]);

        } catch (\Exception $error) {
            //Resposta JSON padrão para falhas
            return (new DefaultErrorResource(['message' => $error->getMessage()]))->response()->setStatusCode(HttpStatusCodesUtils::INTERNAL_SERVER_ERROR);
        }
    }
}
