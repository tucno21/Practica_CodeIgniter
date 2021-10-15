tinymce.init({
    selector: '#textarea',
    height: 500,
    menubar: false,
    plugins:[
        'advlist autolink list link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount code'
        ],
    toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | formatselect | backcolor  | outdent indent | removeformat | help | code',
        
    content_style: 'body {font-family:Helvetica, Arial, sans-serif; font-size:14px}'
});