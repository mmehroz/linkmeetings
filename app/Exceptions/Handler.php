<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Mail;
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
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        /*if ($exception instanceof ErrorException) {
            error_reporting(0);
        $kernel = app(\Illuminate\Contracts\Http\Kernel::class);
        $response = $kernel->handle($request)->send();
        return $kernel->terminate($request, $response);
        } */
        $this->sendEmail($exception);
        return parent::render($request, $exception);
    }


    public function sendEmail($e)
    {
        $app_env = env('APP_ENV');
        if(($app_env != 'local' && $app_env != ''))
        {
            $reporting_email  = ['musharib.rasheed@digitonics.com','musharibdigitonics@gmail.com'];
    //        $reporting_email = env('EXCEPTION_REPORT_EMAIL');

            if ($reporting_email) {
                if ($e->getMessage()) {

                        Mail::send('emails.emailbase', ['emailContent' => nl2br($e->getMessage())], function ($m) use ($reporting_email) {
                            $m->to($reporting_email, 'System Exception Email');
                            $m->from('info@linkmeeting.com', 'Exception Generated Email');
                            $m->subject('Exception Handler on Site');
                        });
                    }

                if (env('APP_DEBUG') == false)
                    die('Contact the mail server administrator to report a service problem.  The email will be sent later. You may want to tell <a href="mailto:info@linkmeeting.com">info@linkmeeting.com</a> about this problem.');

            }
        }
    }


}
