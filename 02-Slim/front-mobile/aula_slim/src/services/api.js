import axios from 'axios'

const api = axios.create({
    baseURL: 'http://10.0.2.2:8012'
})

export default api