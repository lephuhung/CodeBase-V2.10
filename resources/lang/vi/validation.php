<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Thuộc tính following language lines contain Thuộc tính default error messages used by
    | Thuộc tính validator class. Some of these rules have multiple versions such
    | as Thuộc tính size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Thuộc tính :attribute buộc phải chấp nhật',
    'active_url'           => 'Thuộc tính :attribute không phải đường dẫn hợp lệ',
    'after'                => 'Thuộc tính :attribute phải là ngày sau :date.',
    'after_or_equal'       => 'Thuộc tính :attribute phải là ngày sau hoặc bằng :date.',
    'alpha'                => 'Thuộc tính :attribute chỉ chứa kí tự',
    'alpha_dash'           => 'Thuộc tính :attribute chỉ chưa kí tự, số, dấu gạch ngang',
    'alpha_num'            => 'Thuộc tính :attribute chỉ chưa kí tự hoặc số.',
    'array'                => 'Thuộc tính :attribute phải là 1 chuỗi.',
    'before'               => 'Thuộc tính :attribute phải là ngày trước :date.',
    'before_or_equal'      => 'Thuộc tính :attribute phải là ngày trước hoặc bằng :date.',
    'between'              => [
        'numeric' => 'Thuộc tính :attribute phải nằm giữa :min và :max.',
        'file'    => 'Thuộc tính :attribute phải nằm giữa :min và :max kb.',
        'string'  => 'Thuộc tính :attribute phải nằm giữa :min và :max kí tự.',
        'array'   => 'Thuộc tính :attribute phải nằm giữa :min và :max mục.',
    ],
    'boolean'              => 'Thuộc tính :attribute phải là có hoặc không.',
    'confirmed'            => 'Thuộc tính :attribute xác nhận không khớp.',
    'date'                 => 'Thuộc tính :attribute không phải ngày phù hợp.',
    'date_format'          => 'Thuộc tính :attribute không đúng thuộc tính dạng :format.',
    'different'            => 'Thuộc tính :attribute và :other phải khác nhau',
    'digits'               => 'Thuộc tính :attribute phải :digits chữ số.',
    'digits_between'       => 'Thuộc tính :attribute phải nằm giữa :min and :max digits.',
    'dimensions'           => 'Thuộc tính :attribute có độ phân giải không phù hợp.',
    'distinct'             => 'Thuộc tính :attribute có giá trị lặp lại.',
    'email'                => 'Thuộc tính :attribute phải là địa chỉ email',
    'exists'               => 'Thuộc tính selected :attribute không phù hợp',
    'file'                 => 'Thuộc tính :attribute phải là file.',
    'filled'               => 'Thuộc tính :attribute phải là giá trị',
    'image'                => 'Thuộc tính :attribute phải là ảnh.',
    'in'                   => 'Thuộc tính selected :attribute không phù hợp.',
    'in_array'             => 'Thuộc tính :attribute không tồn tại tại :other.',
    'integer'              => 'Thuộc tính :attribute phải là số nguyên.',
    'ip'                   => 'Thuộc tính :attribute phải là IP hợp lệ.',
    'ipv4'                 => 'Thuộc tính :attribute phải là IPv4 hợp lệ.',
    'ipv6'                 => 'Thuộc tính :attribute phải là IPv6 hợp lệ.',
    'json'                 => 'Thuộc tính :attribute phải là chuỗi JSON hơp lệ.',
    'max'                  => [
        'numeric' => 'Thuộc tính :attribute có thể không lớn hơn :max.',
        'file'    => 'Thuộc tính :attribute có thể không lớn hơn :max kb.',
        'string'  => 'Thuộc tính :attribute có thể không lớn hơn :max kí tự.',
        'array'   => 'Thuộc tính :attribute có thể không có nhiều hơn :max mục.',
    ],
    'mimes'                => 'Thuộc tính :attribute phải là một loại tệp: :values.',
    'mimetypes'            => 'Thuộc tính :attribute phải là một loại tệp: :values.',
    'min'                  => [
        'numeric' => 'Thuộc tính :attribute ít nhất phải :min.',
        'file'    => 'Thuộc tính :attribute ít nhất phải :min kb.',
        'string'  => 'Thuộc tính :attribute ít nhất phải :min kí tự.',
        'array'   => 'Thuộc tính :attribute ít nhất phải :min mục.',
    ],
    'not_in'               => 'Thuộc tính đã chọn :attribute không phù hợp.',
    'numeric'              => 'Thuộc tính :attribute phải là số.',
    'present'              => 'Thuộc tính :attribute là trường bắt buộc.',
    'regex'                => 'Thuộc tính :attribute định dạng không đúng.',
    'required'             => 'Thuộc tính :attribute phải bắt buộc.',
    'required_if'          => 'Thuộc tính :attribute phải bắt buộc khi :other là :value.',
    'required_unless'      => 'Thuộc tính :attribute field is required unless :other trong :values.',
    'required_with'        => 'Thuộc tính :attribute phải bắt buộc khi :values có mặt.',
    'required_with_all'    => 'Thuộc tính :attribute phải bắt buộc khi :values có mặt.',
    'required_without'     => 'Thuộc tính :attribute phải bắt buộc khi :values khi không có mặt.',
    'required_without_all' => 'Thuộc tính :attribute phải bắt buộc khi  :values phải có mặt.',
    'same'                 => 'Thuộc tính :attribute anvà :other phải khớp.',
    'size'                 => [
        'numeric' => 'Thuộc tính :attribute phải :size.',
        'file'    => 'Thuộc tính :attribute phải :size kb.',
        'string'  => 'Thuộc tính :attribute phải :size kí tự.',
        'array'   => 'Thuộc tính :attribute phải chứ :size mục.',
    ],
    'string'               => 'Thuộc tính :attribute phải là 1 chuỗi.',
    'timezone'             => 'Thuộc tính :attribute phải là vùng hợp lệ.',
    'unique'               => 'Thuộc tính :attribute đã được sử dụng.',
    'uploaded'             => 'Thuộc tính :attribute tải lên lỗi',
    'url'                  => 'Thuộc tính :attribute định dạng không đúng',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name Thuộc tính lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Thuộc tính following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],
    'custom-messages' => [
        'quantity_not_available' => 'Chỉ :qty :unit còn sẵn hàng',
        'this_field_is_required' => 'Trường này bắt buộc'
    ],

];