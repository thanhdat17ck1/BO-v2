//$name = DB::select('select name from strategies WHERE id=1');
// var app = new Vue({
//     el: '.form-group #exampleFormControlSelect1',
//     delimiters: ['<%', '%>'],
//     data: {
//         getDatas: [
//             {
//                 id: 0,
//                 message: "Hello world"
//             },
//             {
//                 id: 1,
//                 message: "Hello world 1"
//             },
//             {
//                 id: 2,
//                 message: "Hello world 2"
//             },
//             {
//                 id: 3,
//                 message: "Hello world 3"
//             }
//         ]
//     }
// })


var app = new Vue({
    el: '.wrapper',
    delimiters: ['<%', '%>'],
    data () {
        return {
            getDatas: null,
            getstrategies: null
        }
    },
    async mounted () {
        const response = await axios
            .get('http://localhost:8000/api/strategies/');
        console.log('re', response);
        this.getDatas = response['data'];
        this.getstrategies = response['data'];
    }
})
