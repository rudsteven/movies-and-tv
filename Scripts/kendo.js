var dataSource = new kendo.data.DataSource({
    data: products
});

$("#listView").kendoListView({
    dataSource: dataSource,
    template: kendo.template($("#template").html())
});

 $("a.scroll-arrow").hover( 
        function() {
            var direction = $(this).is("#scroll-right") ? "+=" : "-=";
            var totalWidth = -$("#listView").width();
            $("#listView .product").each(function() {
                totalWidth += $(this).outerWidth(true);
            });
            $("#listView").animate({
                scrollLeft: direction + Math.min(totalWidth, 1200)
            },{
                duration: 2000,
                easing: "swing", 
                queue: false }
            );
        },
     function() {
          $("#listView").stop();
     }
 );

