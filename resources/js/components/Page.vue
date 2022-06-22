<template>
    <v-card
        class="pa-2"
        max-width="374"
        outlined
        tile
    >
        <v-img
            height="250"
            src="https://img.freepik.com/free-vector/gradient-coding-logo-template_23-2148809439.jpg?t=st=1655859816~exp=1655860416~hmac=273d140383e18b4a2f096804aa3b5d6015a51e205eeb4c22101463e766b6a74c&w=740"
        ></v-img>

        <v-card-title>Coding | Para Desarrolladores</v-card-title>

        <v-card-text>
            <v-row
                align="center"
                class="mx-0"
            >
            </v-row>

            <div class="my-4 text-subtitle-1">
                Pagina • Prueba - Pagina
            </div>

            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Amet dictum sit amet justo donec enim diam vulputate. Enim sed faucibus turpis in
                eu mi. Nibh cras pulvinar mattis nunc sed blandit libero. Cras tincidunt lobortis feugiat vivamus at
                augue eget arcu.</div>
        </v-card-text>

        <v-divider class="mx-4"></v-divider>

        <v-card-title>Selecciona tu tipo</v-card-title>

        <v-card-text>
            <v-chip-group
                v-model="selection"
                active-class="deep-purple accent-4 white--text"
                column
            >
                <v-chip>Desarrolladores/Programadores</v-chip>

                <v-chip>Empresas</v-chip>

            </v-chip-group>
        </v-card-text>

        <v-card-actions>
            <v-btn
                color="deep-purple lighten-2"
                text
                @click="reserve"
            >
                Ejemplo de Boton
            </v-btn>
        </v-card-actions>
    </v-card>
</template>

<script>
export default {
    name : "Page",
    data: () => ({
        loading: false,
        selection: 1,
    }),

    methods: {
        reserve () {
            this.loading = true

            setTimeout(() => (this.loading = false), 2000)
        },
    },
}
</script>
