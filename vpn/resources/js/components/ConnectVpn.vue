<template>
    <div class="connect-vpn">
        <h1>Подключение к VPN</h1>
        <div class="servers">
            <div v-for="server in servers" :key="server.id" class="server">
                <img :src="server.flag" alt="Флаг" />
                <h2>{{ server.city }}</h2>
                <p>Скорость: {{ server.speed }} Мбит/с</p>
                <p>Протокол: {{ server.protocol }}</p>
                <button @click="connectToServer(server.id)">Подключиться</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            servers: [
                { id: 1, flag: 'path/to/flag1.png', city: 'Москва', speed: 100, protocol: 'OpenVPN' },
                { id: 2, flag: 'path/to/flag2.png', city: 'Нью-Йорк', speed: 200, protocol: 'WireGuard' },
                // Добавьте другие серверы по необходимости
            ],
        };
    },
    methods: {
        connectToServer(serverId) {
            // Логика для подключения к серверу
            console.log(`Подключение к серверу с ID: ${serverId}`);
        },
    },
};
</script>

<style scoped>
.connect-vpn {
    text-align: center;
}

.servers {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.server {
    border: 1px solid #ccc;
    margin: 10px;
    padding: 15px;
    border-radius: 5px;
    width: 200px;
}
</style>
