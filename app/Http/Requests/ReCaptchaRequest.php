<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use ReCaptcha\ReCaptcha;

class ReCaptchaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    private $error_msg = '';

    public function __construct()
    {}

    public function passes($attribute, $value)
    {
        if (empty($value)) {
            $this->error_msg = ':attribute field is required.';

            return false;
        }

        $recaptcha = new ReCaptcha(env('GOOGLE_CAPTCHA_PRIVATE_KEY'));
        $resp      =   $recaptcha->setExpectedHostname($_SERVER['SERVER_NAME'])
            ->setScoreThreshold(0.5)
            ->verify($value, $_SERVER['REMOTE_ADDR']);

        if (!$resp->isSuccess()) {
            $this->error_msg = 'ReCaptcha field is required.';

            return false;
        }

        if ($resp->getScore() < 0.5) {
            $this->error_msg = 'Failed to validate captcha.';

            return false;
        }


        return true;

    }

    public function message()
    {
        return $this->error_msg;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'recaptcha_token' => ['required', new   ReCaptchaRequest($this->recaptcha_token)]
        ];
    }
}
