Nova.booting((Vue, router) => {
    Vue.component('index-PlainFieldNovaPasswordShowHide', require('./components/IndexField'));
    Vue.component('detail-PlainFieldNovaPasswordShowHide', require('./components/DetailField'));
    Vue.component('form-PlainFieldNovaPasswordShowHide', require('./components/FormField'));
})
