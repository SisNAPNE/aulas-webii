import axios from 'axios'

const api = axios.create({
    baseURL: 'https://slim.ifprinteligente.com.br'
})

export default api