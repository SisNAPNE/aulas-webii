import React, { useState, useEffect } from 'react'
import {View, Text, FlatList, Image, ActivityIndicator} from 'react-native'

import api from '../../services/api';

import styles from './styles'
import {contacts, photos} from '../../utils'


function ContactList() {

    const [load, setLoad] = useState(true)
    const [users, setUsers] = useState(null)

    useEffect(() => {
        loadDataApi()   
    }, [])

    async function loadDataApi() {

        setLoad(true)    
        loading()  
        setLoad(false)
        
        // setInterval(await function () {
        // loading()  
        // }, 5000)
    }

    function loading() {

        api.get("/user").then(response => {
            setUsers(response.data)
        })
        .catch(error => {
            console.log("ERROR")  
        })
    }

    function random(limit) {
        return Math.floor(Math.random() * limit)
    }

    return (
        <View style={styles.container}>
        {
            load
            ?
                <View style={styles.container}>
                    <View style={[styles.container, {marginTop: 100, marginBottom: 100}]}>
                        <ActivityIndicator size="large" color="#660033" style={{ transform: [{ scaleX: 2.0 }, { scaleY: 2.0 }] }}/>
                    </View>
                </View>
            :

            <FlatList
                data={users}
                keyExtractor={(item) => item.id}
                renderItem={({item}) => (
                    <View style={styles.box}>
                        <View style={styles.boxLeft}>
                            <Image 
                                style={styles.picture}
                                source={{uri: photos[random(10)].picture.thumbnail}}
                            />
                        </View>
                        <View View style={styles.boxRight}>
                            <View style={styles.boxRightTop}>
                                <View style={styles.boxRightTopName}>
                                    <Text style={styles.textName}>{item.name}</Text>
                                </View>
                                <View style={styles.boxRightTopHour}>
                                    <Text style={styles.textHour}>{photos[random(10)].hour}</Text>
                                </View>
                            </View>
                            <View style={styles.boxRightBottom}>
                                <Text style={styles.textMsg}>{item.email}</Text>
                            </View>
                        </View>
                    </View>
                    )
                }
                showsVerticalScrollIndicator={false}
                showsHorizontalScrollIndicator={false}
            />
        }
        </View>
    )
}

export default ContactList