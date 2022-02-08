<?php

namespace Spatie\LaravelData\Tests\Fakes;

use Illuminate\Foundation\Http\FormRequest;
use Spatie\LaravelData\WithData;

class StringFormRequest extends FormRequest
{
    use WithData;

    public string $dataClass = SimpleData::class;

    public function rules(): array
    {
        return [
            'string' => ['string'],
        ];
    }
}
