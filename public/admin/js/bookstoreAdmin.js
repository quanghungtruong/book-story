var bookstoreAdminJS = function(){}

bookstoreAdminJS.prototype.contructor = function()
{
    var that = this;
    $(document).ready(function(){
        // adjust alias
        $('input[name=cat_name]').change(function(){
            var cat_name = $('input[name=cat_name]').val();
            var alias = that.handle_convert_alias(cat_name);
            if(alias != '')
            {
                $('input[name=alias]').val(alias);
            }
        });
    });
}

bookstoreAdminJS.prototype.handle_convert_alias = function(text)
{
    var alias = text.toLowerCase().replace(/ /g, '-');
    return alias;
}

var runAdminJS = new bookstoreAdminJS();
runAdminJS.contructor();