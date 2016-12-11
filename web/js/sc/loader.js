var sc = sc || {};

sc.loader = (() => {


    const controllers = [
        'game'
    ];

    function getFiles(){
        return sc.helpers.parseURL();
    }


    function loadController(){



    }

    function loadView(){

    }


    function loadData() {

        console.log(getFiles());

        loadController();
        loadView();
    }


    return {
        loadData : loadData
    }
})();