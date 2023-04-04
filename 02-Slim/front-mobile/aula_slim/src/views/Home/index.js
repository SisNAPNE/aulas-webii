import React, { useState, useEffect } from 'react'
import {View, Text, ActivityIndicator, ScrollView, Button, Image} from 'react-native'
import { useNavigation } from '@react-navigation/native'
import Icon from 'react-native-vector-icons/MaterialCommunityIcons';

import styles from './styles'
import api from '../../services/api';

function Home({route}) {

    // console.log(route.params)
    const navigation = useNavigation()

    const [beats, setBeats] = useState(0)
    const [steps, setSteps] = useState(0)
    const [conn, setConn] = useState(1)
    const [load, setLoad] = useState(true)

    useEffect(() => {
        loadDataApi()   
    }, [])

    async function loadDataApi() {
   
        setLoad(true)    
        loading()  
        setLoad(false)
        
        setInterval(await function () {
            loading()  
        }, 2000)

    }

    function loading() {

        api.get("/batimentos/last").then(response => {
            setBeats(response.data[0].valor);
        })
        .catch(error => {
            alert('[ERROR]')
        })
    
        api.get("/passos/last").then(response => {
            setSteps(response.data[0].valor);
        })
        .catch(error => {
            alert('[ERROR]')
        }) 

        api.get("/peitoral").then(response => {
            setConn(response.data[0].status);
        })
        .catch(error => {
            alert('[ERROR]')
        })
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
            
                    <View style={styles.container}>
                        <View style={styles.box}>
                            <View style={styles.box_item}>
                                {
                                    conn == 1
                                    ?
                                        <Icon name="power-plug" size={128} color="#660033"/>
                                    :
                                        <Icon name="power-plug-off" size={128} color="#660033"/>
                                }
                                <Text style={styles.text}>Conexão</Text>
                            </View>
                            <View style={styles.box_item}>
                                {
                                    conn == 1
                                    ?
                                        <Icon name="tooltip-check" size={80} color="#3A3"/>
                                    :
                                        <Icon name="tooltip-remove" size={80} color="#E55"/>
                                }
                            </View>
                        </View>

                        <View style={styles.box}>
                            <View style={styles.box_item}>
                                <Icon name="cards-heart" size={128} color="#660033"/>
                                <Text style={styles.text}>Batimento</Text>
                            </View>
                            <View style={styles.box_item}>
                                <Text style={styles.text_value}>{beats}</Text>
                            </View>
                        </View>

                        <View style={styles.box}>
                            <View style={styles.box_item}>
                                <Icon name="paw" size={128} color="#660033"/>
                                <Text style={styles.text}>Metros</Text>
                            </View>
                            <View style={styles.box_item}>
                                <Text style={[styles.text_value, {color: "#660033"}]}> {steps} </Text>
                            </View>
                        </View>
                    </View>
            }
        </View>
    )
}

export default Home

// // <Text><Icon name="cards-heart" size={128} color="#D11"/></Text>