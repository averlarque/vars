$(document).ready(function(){
   $('.discounts a').click(function() {
       if($('.discounts').hasClass('view')) {
           $('.discounts .text').animate({'top':'-114px'}, 1000,function() {
               $('.discounts').removeClass('view');
           });
       }else {
           $('.discounts .text').animate({'top':'30px'}, 1000,function() {
               $('.discounts').addClass('view');
           });
       }

        return false;
   });
});

$.backgroundChanger = {
    currentImage: 1,
    changeImage: 1,
    imageList: '',
    selectedElement: '',
    thumbH: 88,
    interval: 4000,
    init: function(imageList, selectedElement, generatePreview) {
        this.imageList = imageList;
        this.selectedElement = $('img',selectedElement);
        this.selectedAniamteElement = $('.animate',selectedElement);
        selectedElement.append('<div class="shadow"></div>');
        if($('body').hasClass('home')) {
            $('.shadow', selectedElement).height(selectedElement.height());
        }
        if(generatePreview) {
            this.generatePreview = generatePreview;
            $('body').addClass('has-preview').append('<div class="thumbs-list"><div class="inner"></div><div class="shadow"></div></div> ');
            $.each(imageList, function(index, src) {
               $('body .thumbs-list .inner').append('<a href="'+src+'" rel="'+(index+1)+'" id="item'+(index+1)+'">' +
                   '<img src="'+src+'" height="'+ $.backgroundChanger.thumbH+'"/>' +
                   '<span></span>'+
                   '</a>')
            });
            $('body .thumbs-list a[rel="'+this.currentImage+'"]').addClass('active');
        }
        $.backgroundChanger.timeout_id = setInterval(function() {
            $.backgroundChanger.animate();
        }, this.interval);
        $('body .thumbs-list a').on('click', function() {
            if($.backgroundChanger.changeImage) {
                clearInterval($.backgroundChanger.timeout_id);
                $.backgroundChanger.currentImage = parseInt($(this).attr('rel')) - 1;
                $(this).addClass('active');
                $.backgroundChanger.animate();
                $.backgroundChanger.timeout_id = setInterval(function() {
                    $.backgroundChanger.animate();
                }, $.backgroundChanger.interval);
            }

            return false;
        });

    },
    animate: function() {
        $('img', this.selectedAniamteElement).attr('src',this.imageList[this.currentImage]);
        if($.backgroundChanger.generatePreview) {
            $('body .thumbs-list a').removeClass('active');
            $('body .thumbs-list a[rel="'+(this.currentImage+1)+'"]').addClass('active');
        }
        this.changeImage = 0;
        this.selectedAniamteElement.animate({opacity:1}, 1000,function(){
            $.backgroundChanger.selectedElement.attr('src',$.backgroundChanger.imageList[($.backgroundChanger.currentImage)]);
            $.backgroundChanger.selectedAniamteElement.css({'opacity':0});
            $.backgroundChanger.changeImage = 1;
            $.backgroundChanger.currentImage = $.backgroundChanger.currentImage +1 > $.backgroundChanger.imageList.length -1 ?
                0 : $.backgroundChanger.currentImage + 1;
        });
    }

}


