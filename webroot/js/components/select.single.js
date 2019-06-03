'use strict'

class SelectSingle extends React.Component{
     constructor(props) {
        super(props);
    }
    render(){
        var options = this.getOptions();
        return React.createElement(
            'select',
            {
                'name' : this.props.data.name,
                'class' :'uk-select'
            },
            options
        );
    }
    getOptions(){
        var options = [];
        var data = this.props.data.options;
        if(data){
            if(this.props.data.empty_value){
                options.push(React.createElement('option',{value : ""},"Пусто"));
            }
            for(var option of data){
                var selected  = false;
                if(option.value == this.props.data.selected){
                    selected  = 'selected = true';
                }
                var opt = React.createElement('option',{value : option.value,selected},option.title);
                options.push(opt);
            }
        }
        return options;
    }
}
