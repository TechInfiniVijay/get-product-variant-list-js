"use strict";

function createArray(size, color = null, material = null) {
    var colors = color.toString().split(/[ ,]+/);
    var sizes = size.toString().split(/[ ,]+/);
    var materials = material.toString().split(/[ ,]+/);
    var multiArr = {
        size: sizes, color: colors, material: materials
    }
    return multiArr;
}

function combination() {
    let color = document.getElementById('color').value;
    let size = document.getElementById('size').value;
    let material = document.getElementById('material').value;

    if (color == '') {
        $('.msgC').html(`<span class="text-danger">Please Type Color.</span>`)
    } else if (size == '') {
        $('.msgS').html(`<span class="text-danger">Please Type Size.</span>`)
    } else {
        $('.msgM').html(`<span class="text-danger">Please Type Material.</span>`)
    }

    if (color !== '' && size !== '' && material !== '') {

        document.getElementById("variantForm").reset();
        $('.msgS').html(''); $('.msgC').html(''); $('.msgM').html('');
        $('#result1').fadeIn('slow').css('display', 'block')

        let attributes = createArray(size, color, material);

        const f = (a, b) => [].concat(...a.map(d => b.map(e => [].concat(d, e))));
        const cartesian = (a, b, ...c) => (b ? cartesian(f(a, b), ...c) : a);

        const resArr = cartesian(attributes.size, attributes.color, attributes.material);
        const resObj = resArr.map((x) => ({ sizes: x[0], color: x[1], material: x[2] }))

        $('#totalVariants').html(`Total Variants : ${resObj.length}`)
        $(resObj).each(function (i, obj) {
            $('#result').append(`<li class="text-success">${obj.color} / ${obj.sizes} / ${obj.material}</li>`);
        });
    }
}

function clearResult() {
    document.getElementById("variantForm").reset();
    $('.msgS').html(''); $('.msgC').html(''); $('.msgM').html('');
    $('totalVariants').html('')
    $('ol').empty();
    $('#result1').fadeOut(5000).css('display', 'none');
}
