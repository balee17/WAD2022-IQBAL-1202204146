import { HTTPClient } from '@/services/base/api';
import { AxiosResponse } from 'axios';
import { CategoryType } from 'model/Products';

export const FindRoomByRoomType = (room: CategoryType): Promise<AxiosResponse> => {
  return HTTPClient.get('api/room', { params: { 'room-type': room } });
};

export const GetRooms = (): Promise<AxiosResponse> => {
  return HTTPClient.get('api/room');
};
