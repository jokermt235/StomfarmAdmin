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
                var formData = new FormData(document.querySelector('form'));
                var formKeys  = formData.keys();
                var formValues = [];
                var data = {};
                for(var key of formKeys){
                    data[key] = formData.get(key);
                }
                console.log(data);
                instance.post('/users/add',data).then(function(response){
                    console.log(response);
                }).catch(function(error){
                    console.log(error);
                });
            },
        },
        'Сохранить'
    );
  }
}
