<template>
  <div class="home">
    <Header />
    <Hero/>
    <Banner/>
    <InstaStore/>
    <PartnerLogo/>
    <Footer/>

  </div>
</template>

<script>
// @ is an alias to /src
// import HelloWorld from "@/components/HelloWorld.vue";
import Header from "@/components/Header.vue";
import Hero from "@/components/Hero.vue";
import Banner from "@/components/Banner.vue";
import InstaStore from '@/components/InstaStore';
import PartnerLogo from '@/components/PartnerLogo';
import Footer from '@/components/Footer';


export default {
  name: "Home",
  components: {
    Header,
    Hero,
    Banner,
    InstaStore,
    PartnerLogo,
    Footer
  }
};
</script>
