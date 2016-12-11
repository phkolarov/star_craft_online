var sc = sc || {};

sc.run = (() => {


    function start() {
        sc.loader.loadData();
    }

    return {
        start : start
    }
})();