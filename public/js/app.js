var app = new Vue({
    el: '.wrapper',
    delimiters: ['<%', '%>'],
    data () {
        return {
            getDatas: null,
            getstrategies: null,
            getSignals: null
        }
    },
    methods: {
      editUrl(id) {
          return STRATEGY_EDIT_URL.replace(':id', id);
      },
        deleteUrl(id){
          return STRATEGY_DELETE_URL.replace(':id', id);
        }
        ,
        updateUrl(id){
          return STRATEGY_UPDATE_URL.replace(':id', id);
        }
    },
    async mounted () {
        const response = await axios
            .get('http://localhost:8000/api/strategies/');
        //console.log('re', response);
        this.getDatas = response['data'];
        this.getstrategies = response['data'];

        const response1 = await axios
            .get('http://localhost:8000/api/signals/');
        //console.log('re', response);
        this.getSignals = response1['data'];
    },
    // async mounted () {
    //     const response = await axios
    //         .get('http://localhost:8000/api/signals/');
    //     //console.log('re', response);
    //     this.getSignals = response['data'];
    // }
})
