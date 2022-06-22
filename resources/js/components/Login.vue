<v-content>
    <v-container fluid fill-height>
        <v-layout align-center justify-center>
            <v-flex xs12 sm8 md4>
                <v-card class="elevation-12">
                    <v-toolbar dark :color="color">
                        <v-toolbar-title>{{ loginTexto }}</v-toolbar-title>

                    </v-toolbar>
                    <v-card-text>
                        <v-form>
                            <v-text-field v-if="mostrarCampo" prepend-icon="mdi-account" name="login" label="Usuario"
                                          type="text"></v-text-field>
                            <v-text-field v-if="mostrarCampo" id="password" prepend-icon="mdi-lock" name="password" :label="contrasenia"
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
                        <v-btn v-if="mostrarCampo" dark @click="login()" :color="color">Ingresar</v-btn>
                    </v-card-actions>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn v-if="mostrarLogOut" dark @click="logOut()" :color="color">Cerrar Sesión</v-btn>
                    </v-card-actions>
                </v-card>
                <v-dialog
                    v-model="mostrarDialogo"
                    width="500"
                >
                    <v-card>
                        <v-card-title class="text-h5 grey lighten-2">
                            Aviso
                        </v-card-title>

                        <v-card-text>
                            Seguro de logear?
                        </v-card-text>

                        <v-divider></v-divider>

                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn
                                color="primary"
                                text
                                @click="mostrarDialogo = false"
                            >
                                Si, acepto
                            </v-btn>
                        </v-card-actions>
                    </v-card>
                </v-dialog>
            </v-flex>
        </v-layout>
    </v-container>
</v-content>

<script>

export default {
    name: "Login",
    data:()=>({
        items: [
            { title: 'Dashboard', icon: 'mdi-view-dashboard' },
            { title: 'Photos', icon: 'mdi-image' },
            { title: 'About', icon: 'mdi-help-box' },
        ],
        drawer: false,
        group: null,
        loginTexto:'Login Acount',
        contrasenia: 'Contraseña',
        color : 'green darken-2',
        mostrarDialogo : false,
        mostrarCampo : true,
        mostrarLogOut : false,
    }),
    props: {
        source: String
    },
    methods: {
        login(){
            //alert('Presionaste el login');
            this.loginTexto = 'Login Prueba';
            this.contrasenia = 'Contraseña Prueba';
            this.color = 'grey darken-3';
            this.mostrarDialogo = true;
            this.mostrarCampo = false;
            this.mostrarLogOut = true;
        },
        logOut(){
            this.mostrarLogOut = false;
            //alert('Presionaste el login');
            this.loginTexto = 'Login Prueba';
            this.contrasenia = 'Contraseña Prueba';
            this.color = 'grey darken-3';
            this.mostrarDialogo = true;
            this.mostrarCampo = true;
        }
    }
}
</script>

<style scoped>

</style>
