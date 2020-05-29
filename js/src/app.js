import 'bootstrap';

const contactForm = document.getElementById('contact-form');

contactForm.addEventListener('submit', function(event) {

    event.preventDefault();

    const encodeURI = function(obj) {
      var result = '';
      var splitter = '';
      if (typeof obj === 'object') {
        Object.keys(obj).forEach(function(key) {
            result += splitter + key + '=' + encodeURIComponent(obj[key]);
            splitter = '&';
        });
      }
      return result;
    };
    
    const url = '/wordpress/wp-admin/admin-ajax.php';
  
    var data = encodeURI({
        'firstname': firstname, 
        'email': email, 
        'message': message, 
        'action': 'contact_form'
    });

   fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
        },
        body: encodeURI({'action': 'contact_form'}),
    })
    
    .then(response => response.json())
    
    .then(data => {
        let response = document.getElementById('response');
        response.innerHTML = '';
        response.innerHTML += '<div class="alert alert-success"><i class="fa fa-check"></i> '+data.message+' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    })

    .catch((error) => {

        console.error('Error:', error);

    });
});
