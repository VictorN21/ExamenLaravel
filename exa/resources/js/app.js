import {createApp} from "vue/dist/vue.esm-bundler";
import cronometro from "./componentes/cronometro";
import tabla from "./componentes/tabla";



createApp({
    components:{
        cronometro,tabla,
    }


}).mount('#app');
