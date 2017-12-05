function fetch_city(val)

{

    $.ajax({

        type: 'post',

        url: '/home/fetch',

        data: {

            get_province: val

        },

        success: function (response) {

            document.getElementById("city").innerHTML = response;

        }

    });

}