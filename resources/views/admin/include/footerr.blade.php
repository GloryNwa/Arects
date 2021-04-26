<script src="/assets1/bundles/libscripts.bundle.js"></script>    
<script src="/assets1/bundles/vendorscripts.bundle.js"></script>

<script src="/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="/assets/vendor/parsleyjs/js/parsley.min.js"></script>
    
<script src="/assets1/bundles/mainscripts.bundle.js"></script>
<script>
    $(function() {
        // validation needs name of the element
        $('#food').multiselect();

        // initialize after multiselect
        $('#basic-form').parsley();
    });
</script>
</body>

</html>