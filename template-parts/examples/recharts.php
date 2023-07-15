
<div id="root"></div>
<!-- <script type='module' src="./bundle.js"></script> -->
<script type='module' src="./recharts-example-out.js"></script>
<script type='module' >
  import App from './wp-content/themes/ish_wp_theme/recharts-example-out.js';
  // import { createRoot } from 'react-dom/client';

  const el = document.querySelector('#root')
  const e = React.createElement;

  const domContainer = document.querySelector('#root');
  const root = ReactDOM.createRoot(domContainer);
  root.render(e(App));
</script>