<template>
    <v-app
        id="inspire"
        dark
    >
        <v-navigation-drawer
            v-model="drawer"
            app
        >
            <v-list-item>
                <v-list-item-content>
                    <v-list-item-title class="text-h6">
                        Aplicacion Web
                    </v-list-item-title>
                    <v-list-item-subtitle>
                        En construcción
                    </v-list-item-subtitle>
                </v-list-item-content>

            </v-list-item>

            <v-divider></v-divider>

            <v-list
                dense
                nav
            >
                <v-list-item

                    link
                >
                    <v-list-item-icon>
                        <v-icon>{{ 'mdi-image' }}</v-icon>
                    </v-list-item-icon>

                    <v-list-item-content>
                        <v-list-item-title @click="loginHome()">{{ loginHomeTexto }}</v-list-item-title>
                    </v-list-item-content>

                </v-list-item>

                <v-list-item
                    v-if = "mostrarLogOutHome"
                    link
                >
                    <v-list-item-icon>
                        <v-icon>{{ 'mdi-image' }}</v-icon>
                    </v-list-item-icon>

                    <v-list-item-content>
                        <v-list-item-title @click="logOutHome()">{{ logOutHomeTexto }}</v-list-item-title>
                    </v-list-item-content>

                </v-list-item>

                <v-list-item
                    v-if = "mostrarRegistroHome"
                    link
                >
                    <v-list-item-icon>
                        <v-icon>{{ 'mdi-image' }}</v-icon>
                    </v-list-item-icon>

                    <v-list-item-content>
                        <v-list-item-title @click="registerHome()">{{ registrarHomeTexto }}</v-list-item-title>
                    </v-list-item-content>

                </v-list-item>

                <v-list-item

                    link
                >
                    <v-list-item-icon>
                        <v-icon>{{ 'mdi-view-dashboard' }}</v-icon>
                    </v-list-item-icon>

                    <v-list-item-content>
                        <v-list-item-title>About</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>

        <v-app-bar app>
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

            <v-toolbar-title>
                Aplicacion Web
            </v-toolbar-title>
        </v-app-bar>

        <v-main>
            <v-content>
                <v-container fluid class="fill-height">
                    <v-row
                        class="mb-6"
                        no-gutters>
                        <v-col

                        >
                            <page></page>
                        </v-col>
                        <v-col

                        >


                                <v-card
                                    class="pa-2 mr-16"
                                    outlined
                                    tile
                                    v-if="mostrarLoginForm"
                                >
                                    <v-toolbar dark :color="colorForm">
                                        <v-toolbar-title>{{ loginFormTexto }}</v-toolbar-title>

                                    </v-toolbar>
                                    <v-card-text>
                                        <v-form>
                                            <v-text-field v-if="mostrarCampo" prepend-icon="mdi-account" name="login" label="Usuario"
                                                          type="text"></v-text-field>
                                            <v-text-field v-if="mostrarCampo" id="password" prepend-icon="mdi-lock" name="password" :label="contraseniaForm"
                                                          type="password"></v-text-field>
                                            <v-img
                                                lazy-src="https://picsum.photos/id/11/10/6"
                                                max-height="150"
                                                max-width="250"
                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsMECl9zNRXD51p6HE0vWfulzqHvP1CY4FHoFCR13_eZfj8sH7brbduFRvylQYCG5o9Q&usqp=CAU"
                                            ></v-img>
                                        </v-form>
                                    </v-card-text>
                                    <v-card-actions>
                                        <v-spacer></v-spacer>
                                        <v-btn v-if="mostrarCampo" dark @click="loginForm()" :color="colorForm">Ingresar</v-btn>
                                    </v-card-actions>
                                    <v-card-actions>
                                        <v-spacer></v-spacer>
                                        <v-btn v-if="mostrarHome" dark @click="regresarForm()" :color="colorForm">Regresar</v-btn>
                                    </v-card-actions>
                                </v-card>
                                <!--
                                posible v-dialog
                                 -->


                        </v-col>
                    </v-row>


                </v-container>
            </v-content>


        </v-main>
    </v-app>
</template>

<script>

export default {
    name: "Home",
    data: () => ({
        drawer: null,
        loginHomeTexto: 'Login',
        logOutHomeTexto: 'Cerrar Sesión',
        registrarHomeTexto: 'Registrarse',
        mostrarLogOutHome: false,
        mostrarRegistroHome: true,

        mostrarLoginForm: false,

        loginFormTexto:'Login Acount',
        contraseniaForm: 'Contraseña',
        mostrarCampo : true,
        colorForm : 'deep-purple lighten-2',

        mostrarHome: false,


    }),
    methods: {
        loginHome(){
            //alert('Presionaste el login home');
            this.mostrarLoginForm = true;
            this.mostrarHome = true;
        },
        registerHome(){
            alert('Presionaste el register Home | Aun estamos trabajando en esa funcion');
        },
        logOutHome(){
            this.loginHomeTexto = 'Login';
            this.mostrarLogOutHome = false;
            this.mostrarRegistroHome = true;
            this.loginFormTexto = 'Login Acount';
            this.contraseniaForm = 'Contraseña';
            this.mostrarCampo = true;
            this.mostrarHome = false;
        },
        loginForm(){
            this.loginHomeTexto = 'Bienvenido,';
            this.mostrarRegistroHome = false;
            this.loginFormTexto = 'Bienvenido';
            this.contraseniaForm = 'Contraseña Prueba';
            this.mostrarCampo = false;
            this.mostrarLogOutHome = true;
            this.mostrarHome = true;
        },
        regresarForm(){
            this.mostrarHome = false;
            this.mostrarLoginForm = false;
        }
    }
}
</script>
