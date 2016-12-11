var sc = sc || {};

sc.helpers = (() => {

    function parseURL(){


        let url = window.location.href;


        console.log(url);

        return {
            'controller' : '',
            'action': '',
            'parameters': ''
        }
    }


    return {
        parseURL : parseURL
    }
})();