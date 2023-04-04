const photos = [
    {
        hour: '18:21',
        picture: {
            large: "https://randomuser.me/api/portraits/women/57.jpg",
            medium: "https://randomuser.me/api/portraits/med/women/57.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/women/57.jpg"
        }
    },
    {
        hour: '12:36',
        picture: {
            large: "https://randomuser.me/api/portraits/women/9.jpg",
            medium: "https://randomuser.me/api/portraits/med/women/9.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/women/9.jpg"
        }
    },
    {
        hour: '14:01',
        picture: {
            large: "https://randomuser.me/api/portraits/women/61.jpg",
            medium: "https://randomuser.me/api/portraits/med/women/61.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/women/61.jpg"
        }
    },
    {
        hour: '21:42',
        picture: {
            large: "https://randomuser.me/api/portraits/men/95.jpg",
            medium: "https://randomuser.me/api/portraits/med/men/95.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/men/95.jpg"
        }
    },
    {
        hour: '11:23',
        picture: {
            large: "https://randomuser.me/api/portraits/women/17.jpg",
            medium: "https://randomuser.me/api/portraits/med/women/17.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/women/17.jpg"
        }
    },
    {
        hour: '08:54',
        picture: {
            large: "https://randomuser.me/api/portraits/men/72.jpg",
            medium: "https://randomuser.me/api/portraits/med/men/72.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/men/72.jpg"
        }
    },
    {
        hour: '13:42',
        picture: {
            large: "https://randomuser.me/api/portraits/men/58.jpg",
            medium: "https://randomuser.me/api/portraits/med/men/58.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/men/58.jpg"
        }
    },
    {
        hour: '07:40',
        picture: {
            large: "https://randomuser.me/api/portraits/men/67.jpg",
            medium: "https://randomuser.me/api/portraits/med/men/67.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/men/67.jpg"
        }
    },
    {
        hour: '22:47',
        picture: {
            large: "https://randomuser.me/api/portraits/women/77.jpg",
            medium: "https://randomuser.me/api/portraits/med/women/77.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/women/77.jpg"
        }
    },
    {
        hour: '12:33',
        picture: {
            large: "https://randomuser.me/api/portraits/men/79.jpg",
            medium: "https://randomuser.me/api/portraits/med/men/79.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/men/79.jpg"
        }
    },
]

const contacts = [
    {
        id: 1,
        name: "Rebeca",
        hour: '18:21',
        msg: 'Ok amor, a noite conversmos',
        picture: {
            large: "https://randomuser.me/api/portraits/women/57.jpg",
            medium: "https://randomuser.me/api/portraits/med/women/57.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/women/57.jpg"
        }
    },
    {
        id: 2,
        name: "Elaine",
        hour: '12:36',
        msg: 'Tudo bem, até mais tarde',
        picture: {
            large: "https://randomuser.me/api/portraits/women/9.jpg",
            medium: "https://randomuser.me/api/portraits/med/women/9.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/women/9.jpg"
        }
    },
    {
        id: 3,
        name: "Bruna",
        hour: '14:01',
        msg: 'Tudo bem, até mais tarde',
        picture: {
            large: "https://randomuser.me/api/portraits/women/61.jpg",
            medium: "https://randomuser.me/api/portraits/med/women/61.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/women/61.jpg"
        }
    },
    {
        id: 4,
        name: "Douglas",
        hour: '21:42',
        msg: 'Tudo bem, até mais tarde',
        picture: {
            large: "https://randomuser.me/api/portraits/men/95.jpg",
            medium: "https://randomuser.me/api/portraits/med/men/95.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/men/95.jpg"
        }
    },
    {
        id: 5,
        name: "Silvana",
        hour: '11:23',
        msg: 'Não esquece da festa amanhã',
        picture: {
            large: "https://randomuser.me/api/portraits/women/17.jpg",
            medium: "https://randomuser.me/api/portraits/med/women/17.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/women/17.jpg"
        }
    },
    {
        id: 6,
        name: "Rafael",
        hour: '08:54',
        msg: 'Valeu, abraço!',
        picture: {
            large: "https://randomuser.me/api/portraits/men/72.jpg",
            medium: "https://randomuser.me/api/portraits/med/men/72.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/men/72.jpg"
        }
    },
    {
        id: 7,
        name: "Leandro",
        hour: '13:42',
        msg: 'Futebol confirmado na sexta',
        picture: {
            large: "https://randomuser.me/api/portraits/men/58.jpg",
            medium: "https://randomuser.me/api/portraits/med/men/58.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/men/58.jpg"
        }
    },
    {
        id: 8,
        name: "Carlos",
        hour: '07:40',
        msg: 'Documento recebido, obrigado!',
        picture: {
            large: "https://randomuser.me/api/portraits/men/67.jpg",
            medium: "https://randomuser.me/api/portraits/med/men/67.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/men/67.jpg"
        }
    },
    {
        id: 9,
        name: "Mariana",
        hour: '22:47',
        msg: 'Saudade, venha me visitar!',
        picture: {
            large: "https://randomuser.me/api/portraits/women/77.jpg",
            medium: "https://randomuser.me/api/portraits/med/women/77.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/women/77.jpg"
        }
    },
    {
        id: 10,
        name: "Cristian",
        hour: '12:33',
        msg: 'Na terça nós verificamos isso',
        picture: {
            large: "https://randomuser.me/api/portraits/men/79.jpg",
            medium: "https://randomuser.me/api/portraits/med/men/79.jpg",
            thumbnail: "https://randomuser.me/api/portraits/thumb/men/79.jpg"
        }
    },
]

export {
    photos,
    contacts,
} 
   