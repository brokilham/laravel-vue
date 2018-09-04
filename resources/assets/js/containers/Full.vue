<template>
  <div class="app">
    <Header/>
    <div class="app-body">
      <Sidebar :navItems="nav"/>
      <main class="main">
        <breadcrumb :list="list"/>
        <div class="container-fluid">
          <router-view></router-view>
        </div>
      </main>
      <Aside/>
    </div>
    <Footer/>
  </div>
</template>
<script>
import nav from '../_nav'
import Header  from '../components/Header.vue'
import Footer from '../components/Footer.vue'
import Sidebar from '../components/Sidebar.vue'
import Aside from '../components/Aside.vue'
import Breadcrumb from '../components/Breadcrumb.vue'
export default {
  name: 'full',
  components: {
    Header,
    Footer,
    Sidebar,
    Aside,
    Breadcrumb
  },
  data () {
    return {
      nav: nav.items
    }
  },
  computed: {
    name () {
      return this.$route.name
    },
    list () {
      return this.$route.matched
    }
  }
}
//import { Header as AppHeader, Sidebar, Aside as AppAside, Footer as AppFooter, Breadcrumb } from '../components/'

/*export default {
  name: 'full',
  components: {
    AppHeader,
    Sidebar,
    AppAside,
    AppFooter,
    Breadcrumb
  },
  data () {
    return {
      nav: nav.items
    }
  },
  computed: {
    name () {
      return this.$route.name
    },
    list () {
      return this.$route.matched
    }
  }
}*/
</script>