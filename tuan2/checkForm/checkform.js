$.fn.checkForm = function(options){
            var setting = $.extend({
                maxLength : 100,
                minLength : 6,
                min : 6,
                max : 40,
                error : ''
            },options);
            return $(this).each(function(){
                var input = $(this).find('input');
                input.each( function(){
                    $(this).change( function(){

                        var value= $(this).val();
                        var type= $(this).attr('character');
                        var error = $(this).parent().find('p');
                        setting.maxLength = $(this).attr('maxLength');
                        setting.minLength = $(this).attr('minLength');
                        setting.max = $(this).attr('max');
                        setting.min = $(this).attr('min');

                        console.log(value);
                        console.log('--------------------');

                        switch(type)
                        {
                            case "text":
                                if( value.length < setting.minLength || value.length > setting.maxLength )
                                {
                                    setting.error = "nhap tu " + setting.minLength + " den " + setting.maxLength + " ki tu";
                                    error.html( setting.error ).css( {'color':'red','display':'inline'} );
                                }
                                else error.html( "" );
                                break;

                            case "number":
                                if( isFinite( value ) )
                                {
                                    var value1 = parseFloat(value);
                                    if ( value1 < setting.min || value1 > setting.max )
                                    {
                                        setting.error = "gia tri nhap tu " + setting.min + " den " + setting.max;
                                        error.html( setting.error ).css( {'color':'red','display':'inline'} );
                                    }
                                    else error.html("");
                                }
                                else error.html( "gia tri nhap la 1 so" ).css( {'color':'red','display':'inline'} )
                                break;

                            case "digits":
                                if(isFinite(value))
                                {
                                    var value1 = parseInt(value);
                                    if(value1 == value)
                                    {
                                        if ( value1 < setting.min || value1 > setting.max )
                                        {
                                            setting.error = "gia tri nhap tu " + setting.min + " den " + setting.max;
                                            error.html(setting.error).css( {'color':'red','display':'inline'} );
                                        }
                                        else error.html("");
                                    }
                                    else error.html( "gia tri nhap la 1 so nguyen" ).css({'color':'red','display':'inline'})
                                }
                                else error.html( "gia tri nhap la 1 so nguyen" ).css({'color':'red','display':'inline'})
                                break;
                        }
                    })
                });         
            })
        }