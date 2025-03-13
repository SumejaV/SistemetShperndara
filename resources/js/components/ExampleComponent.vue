<template>
    <!-- Struktura kryesore e komponentit -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Kartë për të shfaqur përmbajtjen -->
                <div class="card card-default">
                    <!-- Header i kartës -->
                    <div class="card-header">Example Component</div>

                    <!-- Trupi i kartës me mesazh të thjeshtë -->
                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>  
    </div>
</template>

<script>
export default {
    // Ky funksion ekzekutohet sapo komponenti të montohet në DOM
    mounted() {
        console.log('Component mounted.') // Printon një mesazh në konzolë
    }
}
</script>
