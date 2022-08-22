<template>
    <header>
        <div class="custom-container d-flex">
            <a href="/" class="logo">
                <img src="/assets/img/logo.svg" alt="logotype">
            </a>
            <div class="menu" :class="{'show': showMenu}">
                <ul>
                    <li>
                        <a @click="showMenu = false" href="#stack" class="custom-link">Stack</a>
                    </li>
                    <li>
                        <a @click="showMenu = false" href="#expertise" class="custom-link">Expertise</a>
                    </li>
                    <!--                        <li><a @click="showMenu = false" href="#projects" class="custom-link">Projects</a></li>-->
                    <li class="only-mobile">
                        <a @click="showMenu = false" class="custom-link" href="#contact-us">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="buttons">
                <a class="custom-button custom-outline-button violet contact-us-button" href="#contact-us">Contact Us</a>
                <div class="hamburger classic" @click.stop="toggleMenu" :class="{'is-active': showMenu}" >
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
    </header>
</template>
<script>
export default {
    name: 'Header',
    data () {
      return {
            showMenu: false
        }
    },
    methods: {
        toggleMenu () {
            this.showMenu  = !this.showMenu
        },
        hideMenu () {
            this.showMenu = false
        }
    },
    created () {
        document.addEventListener('click', this.hideMenu.bind(this));
    }
}
</script>
