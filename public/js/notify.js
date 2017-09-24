
                function notiff(title, type, message, icon){
                    $.notify({
                        // options
                        title: "<b>"+title+"</b><br/>",
                        icon: icon,
                        message: message,
                    },{
                        type: type,
                        allow_dismiss: true,
                        newest_on_top: true,
                        showProgressbar: false,
                        placement: {
                            from: "top",
                            align: "right"
                        },
                        offset: 20,
                        spacing: 5,
                        z_index: 3031,
                        delay: 5000,
                        mouse_over: 'pause' ,
                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                        }
                    });
                }
