import { HTTPClient } from '@/services/base/api';
import { AxiosResponse } from 'axios';
import { FeedbacksType } from 'model/Feedbacks';

export const PostFeedback = (form: Omit<FeedbacksType, 'id'>): Promise<AxiosResponse> => {
  return HTTPClient.post('api/feedback', form);
};
