window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */
import '@popperjs/core'
import Dropzone from 'dropzone';
window.Dropzone = Dropzone;

try {
    window.$ = window.jQuery = require('jquery');

    const bootstrap = require('bootstrap')

    window.bootstrap = bootstrap;
    // window.datatables = require('datatables.net-bs');


    // require('jquery-ui/ui/widgets/autocomplete');
    // require('bootstrap-sass');
    // require('datatables.net-bs5')(window, $);
    require('jszip');
    require('pdfmake');
    require( 'datatables.net-responsive-bs5' )();
    require('datatables.net-bs5')();

    // require('datatables.net-responsive-bs5' )(window, $);
    // require('datatables.net-responsive-bs5')();

    require('datatables.net-buttons-bs5')(window, $);
    // require('datatables.net-buttons/js/buttons.html5.js')(window, $);
    // require('datatables.net-staterestore-bs5')(window, $);
     require('datatables.net-bs')(window, $);
    // require('datatables.net-autofill')(window, $);
    // require('datatables.net-autofill-bs')(window, $);
    // require('datatables.net-buttons')(window, $);
    // require('datatables.net-buttons-bs')(window, $);
    // require('datatables.net-colreorder')(window, $);
    // require('datatables.net-fixedcolumns')(window, $);
    // require('datatables.net-fixedheader')(window, $);
    // require('datatables.net-keytable')(window, $);
    // require('datatables.net-responsive')(window, $);
    // require('datatables.net-responsive-bs')(window, $);
    // require('datatables.net-rowgroup')(window, $);
    // require('datatables.net-scroller')(window, $);
    // require('datatables.net-select')(window, $);
} catch (e) {}




/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });