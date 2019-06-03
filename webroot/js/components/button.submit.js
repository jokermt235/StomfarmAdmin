'use strict';

const e = React.createElement;

class ButtonSubmit extends React.Component {

    constructor(props) {
        super(props);
    }


    render() {
    return e(
        'a',
        {
            class : 'uk-button uk-button-primary',

            onClick: () => {
                var form  = document.querySelector('form');
                var formData = new FormData(form);
                var formKeys  = formData.keys();
                var formValues = [];
                var data = {};
                for(var key of formKeys){
                    data[key] = formData.get(key);


                }

                instance.post(form.action,data).then((response)=>{
                    if(response.data.status != 0){
                        window.location.pathname = form.getAttribute('redirect');
                    }else{
                        window.location.pathname = error_500;
                    }
                }).catch(function(error){
                    window.location.pathname = error_500;

                });


            },



        },
        'Сохранить'
    );


    }
}
