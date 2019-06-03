'use strict';

class TableAction extends React.Component{
    constructor(props) {
        super(props);
    }
    render(){
        var header = this.createHeaders();
        var body  = this.createBody();

        return React.createElement(
            'table',
            {

                'class' :'uk-table uk-table-small uk-table-divider'
            },

            [
                header,
                body
            ]
        );


    }

    createHeaders(){

        var header = React.createElement;
        var headerElements = [];
        if(this.props.data){
            if(this.props.data.length > 0){
                var headers = this.props.data[0];
                var keys  = Object.keys(this.props.data[0]);
                var headerElements = [];

                for(var key of keys){
                    headerElements.push(React.createElement('th', {'key':key}, key));
                }

                headerElements.push(React.createElement('th', {'key':'options'}, 'Операции'));
                header('thead',{},React.createElement('tr',{},headerElements));
            }
        }


        return React.createElement('thead',{},React.createElement('tr',{},headerElements));
    }
    createBody(){
        var rows = [];
        var keys  = Object.keys(this.props.data[0]);
        for(var row  of this.props.data){
            var tds = [];
            for(var key of keys){

                tds.push(React.createElement('td',{},row[key]));
            }

            if(this.props.actions.edit){
                tds.push(
                    React.createElement('td',
                        {},
                        React.createElement('a',{ href : this.props.actions.edit.url +"/" +row.id }, this.props.actions.edit.title)
                    )
                );

            }


            if(this.props.actions.view){
                tds.push(
                    React.createElement('td',
                        {},
                        React.createElement('a',{ href : this.props.actions.view.url +"/" +row.id }, this.props.actions.view.title)
                    )
                );
            }

            if(this.props.actions.delete)

            {
                tds.push(
                    React.createElement('td',
                        {},
                        React.createElement('a',

                            {
                                href : 'javascript:', //this.props.actions.delete.url +"/" +row.id,
                                onClick : ()=>{
                                    instance.post(this.props.actions.delete.url +"/" +row.id).then(
                                        (response)=>{
                                            if(response.data.status != 0){
                                                window.location.pathname = deleteRedirect;
                                            }else{
                                                window.location.pathname = error_500;


                                            }


                                        }
                                    )


                                }

                            },
                            this.props.actions.delete.title
                        )
                    )
                );

            }
            rows.push(
                React.createElement('tr',{},tds)
            );

        }
        return React.createElement(
            'tbody',
            {},
            rows
        );

    }
}
