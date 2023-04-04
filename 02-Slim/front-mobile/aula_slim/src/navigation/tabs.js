import React from 'react'
import {View, Text, TouchableOpacity} from 'react-native'
import { NavigationContainer } from '@react-navigation/native'
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs'
import { useNavigation } from '@react-navigation/native'
import Icon from 'react-native-vector-icons/MaterialCommunityIcons'

import Home from '../views/Home'
import Graph from '../views/Graph'
import Contacts from '../views/Contacts'

const Tab = createBottomTabNavigator()

const icons = {
    Contacts: {
      name: 'whatsapp'
    },
    Graph:{
        name: 'cellphone-message'
    },
}

function Tabs({route}) {

    const navigation = useNavigation()

    function LogoTitle() {
        return (
            <View style={{flexDirection: 'row', alignItems:'center'}}>
                <View style={{flexDirection: 'row', justifyContent:'flex-start', alignItems:'center'}}>
                    <Icon name='react' color='#FFF' size={36}/>
                    <Text style={{fontSize: 21, color: '#FFF', fontWeight: 'bold', marginLeft: 10}}>
                        DWII - Slim Framewok
                    </Text>
                </View>
                <View style={{justifyContent:'flex-end', alignItems:'center', width:'30%'}}>
                </View>
            </View>
        )
      }

    return (
        <Tab.Navigator
            screenOptions={ ({route}) => ({
                    tabBarIcon: ({ color, size }) => {
                        const { name } = icons[route.name];
                        return <Icon name={name} color={color} size={size}/>
                    } 
                })
            }
            tabBarOptions={{
                style: {backgroundColor: '#660033'},

                activeTintColor: '#FFF',
                inactiveTintColor: '#005200',
                activeBackgroundColor: '#005200'
            }}
        >
            <Tab.Screen 
                name="Contacts" 
                component={Contacts} 
                options={{ 
                    title: 'Whatsapp',
                    headerTintColor: '#FFF',
                    headerTitleStyle: {
                        fontWeight: 'bold',
                    },
                    headerStyle: {
                        backgroundColor: '#005200',
                    }, 
                    headerTitle: (props) => <LogoTitle {...props} />
                }}
            />
            <Tab.Screen 
                name="Graph" 
                component={Graph} 
                options={{ 
                    title: 'Histórico',
                    headerTintColor: '#FFF',
                    headerTitleStyle: {
                        fontWeight: 'bold',
                    },
                    headerStyle: {
                        backgroundColor: '#005200',
                    }, 
                    headerTitle: (props) => <LogoTitle {...props} />
                }}
            />
        </Tab.Navigator>
    )
}

export default Tabs

// headerTitle: (props) => <LogoTitle {...props} />