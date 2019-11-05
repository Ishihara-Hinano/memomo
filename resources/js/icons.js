import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faCog } from '@fortawesome/free-solid-svg-icons'

library.add(faCog);

Vue.component('icon', FontAwesomeIcon);