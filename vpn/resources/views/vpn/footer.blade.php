    <script src="{{ asset('/js/vue3.min.js') }}"></script>
    <script src="{{ asset('/js/maska.min.js') }}"></script>
    <script src="{{ asset('/js/axios.min.js') }}"></script>
    <script src="{{ asset('/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('/js/user-area.js') }}"></script>
    <script>
        data = {
            "user": {"login": "tg3340863"},
            "billing": {
                "subscription": 0,
                "payed_till_date": "01.10.2034",
                "payment_method_id": null,
                "is_premium": false
            }
        };
        Vue.createApp(App).directive('maska', Maska.maska).mount('#app').getNotifications(true);
    </script>
</body>
</html>
