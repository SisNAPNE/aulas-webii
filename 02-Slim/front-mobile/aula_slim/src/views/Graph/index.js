import React, { useState, useEffect } from 'react'
import {View, Text, Dimensions, ActivityIndicator} from 'react-native'
import Icon from 'react-native-vector-icons/MaterialCommunityIcons';

import api from '../../services/api';

import {
    LineChart,
    BarChart,
    PieChart,
    ProgressChart,
    ContributionGraph,
    StackedBarChart
  } from "react-native-chart-kit";

import styles from './styles'

function Graph({route}) {

    const [load, setLoad] = useState(true)
    const [data, setData] = useState(null)
    const [label, setLabel] = useState(null)
    const [message, setMessage] = useState(null)

    useEffect(() => {
        loadDataApi()   
    }, [])

    async function loadDataApi() {

        // setLoad(true)    
        // loading()  
        // setLoad(false)
        
        setInterval(await function () {
            setLoad(true)    
            loading() 
            setLoad(false) 
        }, 5000)
    }

    function loading() {

        var lab = []
        var msg = []

        api.get("/message").then(response => {
            let a = 0
            response.data.map(function(item){
                lab[a] = item.sigla
                msg[a] = item.total
                a++
            })
            console.log(lab)
            console.log(msg)
            setLabel(lab)
            setMessage(msg)
        })
        .catch(error => {
            console.log("ERROR")  
        })
    }

    return(
        <View style={styles.container}>
            {
                load
                ?
                    <View style={styles.container}>
                        <View style={[styles.container, {marginTop: 100, marginBottom: 100}]}>
                            <ActivityIndicator size="large" color="#005200" style={{ transform: [{ scaleX: 2.0 }, { scaleY: 2.0 }] }}/>
                        </View>
                    </View>
                :
                    <View style={styles.container}>
                        <Text style={styles.text}>
                            <Icon name="android-messages" size={36} color="#005200"/> Histórico de Mensagens
                        </Text>
                        { 
                            label ? message ?
                                <LineChart
                                    data={{
                                        labels: label,
                                        datasets: [
                                            {
                                                data: message
                                            }
                                        ]
                                    }}
                                    width={Dimensions.get("window").width - (Dimensions.get("window").width*0.1)} // from react-native
                                    height={300}
                                    yAxisLabel=""
                                    yAxisSuffix=" msg"
                                    yAxisInterval={1} // optional, defaults to 1
                                    chartConfig={
                                        {
                                            backgroundColor: "#660033",
                                            backgroundGradientFrom: "#005200",
                                            backgroundGradientTo: "#005200",
                                            decimalPlaces: 0, // optional, defaults to 2dp
                                            color: (opacity = 1) => `rgba(255, 255, 255, ${opacity})`,
                                            labelColor: (opacity = 1) => `rgba(255, 255, 255, ${opacity})`,
                                            style: {
                                            borderRadius: 16
                                        },
                                        propsForDots: {
                                            r: "6",
                                            strokeWidth: "3",
                                            stroke: "#FFF"
                                        }
                                    }}
                                    bezier
                                    style={{
                                        marginVertical: 8,
                                        borderRadius: 16
                                    }}
                                />
                            :
                                <Text> </Text>
                            :
                                <Text> </Text>
                        }
                    </View>
            }
        </View>
    )
}

export default Graph