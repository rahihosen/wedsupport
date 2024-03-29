<?php

namespace App\Exceptions;

use Exception;
use Throwable;
use Illuminate\Http\Request;
use NagadAPI\Exceptions\NagadException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render(Request $request, Exception $exception)
    {
        if ($exception instanceof NagadException) {
            //return custom error page when custom exception is thrown
            return response()->view('errors.nagad', compact('exception'));
        }

        return parent::render($request, $exception);
    }
}
